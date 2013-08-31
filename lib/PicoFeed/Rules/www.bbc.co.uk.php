<?php
return array(
    'test_url' => 'http://www.bbc.co.uk/news/world-middle-east-23911833',
    'body' => array(
        '//div[@class="story-body"]',
    ),
    'strip' => array(
        '//script',
        '//form',
        '//style',
        '//*[@class="story-date"]',
        '//*[@class="story-header"]',
        '//*[@class="story-related"]',
        '//*[contains(@class, "byline")]',
        '//*[contains(@class, "story-feature")]',
        '//*[@id="video-carousel-container"]',
        '//*[@id="also-related-links"]',
        '//*[contains(@class, "share") or contains(@class, "hidden") or contains(@class, "hyper")]',
    )
);