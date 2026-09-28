const fs = require('fs');
const path = require('path');

const viewsDir = 'c:\\xampp\\htdocs\\bayanHeritage\\BayanHeritage\\app\\Views';

function processFile(filePath) {
    let content = fs.readFileSync(filePath, 'utf8');
    
    // Custom replacements for specific files
    if (filePath.endsWith('landing_template.php')) {
        content = content.replace(/bg-gradient-to-t from-\[#FFC107\].*?text-\[#5C3211\]/, 'bg-gradient-to-t from-bh-bg to-[#E4D9B8] text-bh-primary-dark');
    }
    
    // Backgrounds
    content = content.replace(/bg-\[#F8F9FA\]/g, 'bg-bh-bg');
    content = content.replace(/bg-\[#FFFFFF\]/g, 'bg-bh-surface');
    content = content.replace(/bg-\[#FFC107\]/g, 'bg-bh-primary');
    content = content.replace(/bg-\[#FF9800\]/g, 'bg-bh-primary');
    content = content.replace(/hover:bg-\[#FF9800\]\/80/g, 'hover:bg-bh-primary-dark');
    content = content.replace(/bg-green-700\/40/g, 'bg-bh-primary\\/90');
    
    // Borders
    content = content.replace(/border-\[#D7D5BA\]/g, 'border-bh-border');
    content = content.replace(/border-\[#F0D3B3\]/g, 'border-bh-border');
    content = content.replace(/border-\[#F0B845\]/g, 'border-bh-border');
    content = content.replace(/border-\[#FF9800\]/g, 'border-bh-primary');
    content = content.replace(/border-\[#5c3211\]/ig, 'border-bh-border');
    
    // Replace hover borders
    content = content.replace(/hover:border-\[#F0B845\]/g, 'hover:border-bh-accent');

    // Stars rating
    content = content.replace(/text-yellow-500/g, 'text-bh-accent');
    content = content.replace(/text-yellow-300/g, 'text-bh-accent');

    // Link/Aksi kecil
    content = content.replace(/text-\[#FF9800\]/g, 'text-bh-accent-text');
    content = content.replace(/text-\[#F4A261\]/g, 'text-bh-accent-text');

    // Texts #5C3211
    content = content.replace(/<(h[1-6]|div|span|p|a|i|button|input|textarea|label)[^>]*text-\[#5C3211\][^>]*>/ig, (match) => {
        if (match.includes('<h')) {
            return match.replace(/text-\[#5C3211\]/i, 'text-bh-primary');
        } else if (match.includes('font-bold') || match.includes('font-semibold')) {
            return match.replace(/text-\[#5C3211\]/i, 'text-bh-brown');
        } else if (match.includes('font-light') || match.includes('opacity-50') || match.includes('text-sm')) {
            return match.replace(/text-\[#5C3211\]/i, 'text-bh-text-muted');
        } else {
            return match.replace(/text-\[#5C3211\]/i, 'text-bh-text');
        }
    });
    // catch remaining
    content = content.replace(/text-\[#5C3211\]/ig, 'text-bh-text');
    content = content.replace(/text-\[#5c3211\]/ig, 'text-bh-text');
    
    // Inline styles replacements
    content = content.replace(/#FFC107/ig, 'var(--color-primary)');
    content = content.replace(/#F8F9FA/ig, 'var(--color-bg)');
    content = content.replace(/#15803d/ig, 'var(--color-primary)');
    
    // Button fix: some had border-[#FF9800] but no bg
    content = content.replace(/class="border border-bh-primary text-white hover:bg-bh-primary-dark/g, 'class="bg-bh-primary text-white hover:bg-bh-primary-dark');

    fs.writeFileSync(filePath, content, 'utf8');
}

function walk(dir) {
    const list = fs.readdirSync(dir);
    for (const file of list) {
        const fullPath = path.join(dir, file);
        const stat = fs.statSync(fullPath);
        if (stat.isDirectory()) {
            walk(fullPath);
        } else if (fullPath.endsWith('.php')) {
            processFile(fullPath);
        }
    }
}

walk(viewsDir);
console.log('Replacement done.');
