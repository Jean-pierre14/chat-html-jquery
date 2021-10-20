<?php
    // Set the language to French
    putenv('LC_ALL = fr_FR');
    setlocale(LC_ALL, 'fr_FR');

    // Specify location of translation tables for 'Language.po' domain
    bindtextdomain('language', './locale');

    // Select 'language' domain
    textdomain('language');
?>