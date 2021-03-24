<?php

return [
    'encoding'      => 'UTF-8',
    'finalize'      => true,
    'cachePath'     => storage_path('app/purifier'),
    'cacheFileMode' => 0755,
    'settings'      => [
        'user_topic_body' => [
            'HTML.Doctype'             => 'XHTML 1.0 Transitional',
            'HTML.Allowed'             => 'div,b,strong,i,em,a[href|title],ul,ol,ol[start],li,p[style],br,span[style],img[width|height|alt|src],*[style|class],pre,hr,code,h1,h2,h3,h4,h5,h6,blockquote,del,table,thead,tbody,tr,th,td,u,strike',
            'CSS.AllowedProperties'    => 'font,font-size,font-weight,font-style,margin,margin-left,margin-right,margin-top,margin-bottom,width,height,font-family,text-decoration,padding,padding-right,padding-top,padding-bottom,padding-left,color,background-color,text-align',
            'AutoFormat.AutoParagraph' => true,
            'AutoFormat.RemoveEmpty'   => true,
        ],
    ],
];
