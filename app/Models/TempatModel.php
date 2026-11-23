<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatModel extends Model
{
    protected $table         = 'tempat';
    protected $primaryKey    = 'ID_tempat';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'nama_tempat', 'badge', 'kabupaten_kota', 'kecamatan', 'kelurahan',
        'nama_jalan', 'kategori', 'deskripsi', 'review_count', 'foto', 'google_maps', 'harga_tiket', 'ID_akun'
    ];

    /**
     * Fungsi utama untuk mengambil data tempat dengan filter, rating, dan pagination.
     *
     * @param array $options Opsi filter seperti ['category' => '...', 'searchTerm' => '...']
     * @param int   $perPage Jumlah item per halaman
     * @return array Mengembalikan data dan objek pager
     */
    public function getTempat(array $options = [], int $perPage = 9)
    {
        // 1. Mulai query dengan SELECT dan JOIN yang dibutuhkan untuk rating.
        $this->select('tempat.*, AVG(review.rating) as average_rating, COUNT(review.ID_review) as real_review_count')
             ->join('review', 'review.ID_tempat = tempat.ID_tempat', 'left');

        // 2. Terapkan filter kategori jika ada dan nilainya valid.
        if (!empty($options['category'])) {
            if ($options['category'] === 'sacred_tombs') {
                $this->groupStart()
                     ->where('tempat.kategori', 'sacred_tombs')
                     ->orLike('tempat.nama_tempat', 'Makam')
                     ->orLike('tempat.badge', 'Ziarah')
                     ->orLike('tempat.badge', 'Sakral')
                     ->groupEnd();
            } elseif (in_array($options['category'], ['tourist_destination', 'culinary'])) {
                $this->where('tempat.kategori', $options['category']);
            }
        }

        // 3. Terapkan filter pencarian jika ada.
        if (!empty($options['searchTerm'])) {
            $this->groupStart()
                 ->like('tempat.nama_tempat', $options['searchTerm'])
                 ->orLike('tempat.deskripsi', $options['searchTerm'])
                 ->orLike('tempat.kabupaten_kota', $options['searchTerm'])
                 ->orLike('tempat.badge', $options['searchTerm'])
                 ->groupEnd();
        }

        // 4. Kelompokkan hasil dan urutkan
        $this->groupBy('tempat.ID_tempat');
        $this->orderBy('tempat.ID_tempat', 'ASC');

        // 5. Kembalikan data yang sudah dipaginasi beserta objek pager-nya.
        return [
            'data'  => $this->paginate($perPage),
            'pager' => $this->pager,
        ];
    }

    
    public function getDetailTempat(int $idTempat)
    {
        return $this->select('tempat.*, AVG(review.rating) as average_rating')
                ->join('review', 'review.ID_tempat = tempat.ID_tempat', 'left')
                ->where('tempat.ID_tempat', $idTempat)
                ->groupBy('tempat.ID_tempat')
                ->first();
    }
    
}