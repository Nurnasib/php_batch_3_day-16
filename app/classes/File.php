<?php


namespace App\classes;


class File
{
    protected $image;
    protected $imageName;
    protected $directory;
    public function __construct($data=null)
    {
        $this->image = $data;
    }

    public function index()
    {
        $this->imageName = $_FILES['image']['name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
        echo 'success';
    }
}