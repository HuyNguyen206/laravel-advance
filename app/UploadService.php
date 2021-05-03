<?php


namespace App;


class UploadService
{
    private $nameFile;
    private $extension;

    public function __construct($nameFile, $extension)
    {

        $this->nameFile = $nameFile;
        $this->extension = $extension;
    }

    public function upload($size, $author, $isSuccess = true)
    {
        if($isSuccess){
            dump('The '.$this->nameFile.'.'.$this->extension.'\'s size is '.$size.' which was upload success belong to '.$author);
        }
        else{
            $this->uploadFail();
        }

    }

    public function uploadFail()
    {
        dump('Upload file '.$this->nameFile.' fail!');
    }
}
