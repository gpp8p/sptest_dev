<?php

namespace App\Classes;

class Constants{
    function __construct(){
        $this->Options  = [
                'urlBase'=>'http://sptests.org:8000/',
                'spacesBase'=>'http://sptests.org/spaces/',
                'solrBase'=>'http://sptests.org:8983/solr/',
                'collection'=>'spaces_test5',
                'fileBase'=>'/var/www/test_1006/storage/app/',
                'linkUrlBase'=>'http://sptests.org:8080/displayLayout/',
                'storageLinkPattern'=>'<img src=\\"http://sptests.org:8000/storage/',
                'tempFileReference'=>'http://sptests.org:8000/storage/',
                'newImageLink'=>'http://sptests.org:8000/images/',
                'dynamicAddress'=>'http://sptests.org:8080/target/',
                'staticAddress'=>'http://sptests.org/spaces/',
                'imageLink'=>'http://sptests.org:8000/images/'
        ];
    }
}

