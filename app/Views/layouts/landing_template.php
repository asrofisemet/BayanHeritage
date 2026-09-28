<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    <style>
        ::-webkit-scrollbar {width: 6px;}
        ::-webkit-scrollbar-track {background: #F2EDE3}
        ::-webkit-scrollbar-thumb {background: #4A6741;border-radius: 3px;}
        ::-webkit-scrollbar-thumb:hover {background: #5B8C51;}
    </style>
</head>

<?= $this->renderSection('content'); ?>

<footer class="text-white py-10 px-5 text-center" style="background: linear-gradient(to top, #3A5535, #4A6741);">
    <h3 class="text-3xl font-extrabold mb-5">Contact Us</h3>
    <p class="my-2.5 text-base flex justify-center items-center gap-2"> 
        <i class="fab fa-twitter"></i> X: lombokrec |
        <i class="fas fa-envelope"></i> email: lombokrec@gmail.com |
        <i class="fab fa-instagram"></i> IG: lombokrec
    </p>
    <p class="my-2.5 text-base font-bold">Thank you for visiting our page, hope this website helps you make your itinerary on Lombok</p>
</footer>
<script src="<?= base_url('js/'.$js) ?>?v=<?= time() ?>"></script>

<?php include APPPATH . 'Views/partials/chatbot.php'; ?>
</body>
</html>