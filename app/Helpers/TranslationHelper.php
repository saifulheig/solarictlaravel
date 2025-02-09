<?php

use Illuminate\Support\Facades\Cache;
use Stichoza\GoogleTranslate\GoogleTranslate;

function translateText($text, $targetLanguage){
    $cacheKey = 'translation_' . md5($text.$targetLanguage);
    if(Cache::has($cacheKey)) {
        return Cache::get($cacheKey);
    }

    $translator = new  GoogleTranslate();
    $translatedText = $translator->setSource('en')
        ->setTarget($targetLanguage)
        ->translate($text);
    // storing cache text for one week
    Cache::put($cacheKey, $translatedText, 10080);
    return $translatedText;
}


