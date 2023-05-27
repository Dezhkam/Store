<?php
namespace App\Http\Services\Image;

class ImageToolsService{
    protected $image;
    protected $exclusiveDirectory;
    protected $imageDirectory;
    protected $imageName;
    protected $imageFormat;
    protected $finalImageDirectory;
    protected $finalImageName;


    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get the value of exclusiveDirectory
     */
    public function getExclusiveDirectory()
    {
        return $this->exclusiveDirectory;
    }


    /**
     * Set the value of exclusiveDirectory
     */
    public function setExclusiveDirectory($exclusiveDirectory): self
    {
        $this->exclusiveDirectory = trim($exclusiveDirectory,'/\\');
        return $this;
    }

    /**
     * Get the value of imageDirectory
     */
    public function getImageDirectory()
    {
        return $this->imageDirectory;
    }

    /**
     * Set the value of imageDirectory
     */
    public function setImageDirectory($imageDirectory): self
    {
        $this->imageDirectory = trim($imageDirectory,'/\\');

        return $this;
    }

    /**
     * Get the value of imageName
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set the value of imageName
     */
    public function setImageName($imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }
    public function setCurrentImageName($imageName){
        return !empty($this->image) ? $this->setImageName(pathinfo($this->image->getClientOriginalName(),PATHINFO_FILENAME)):false;
    }

    /**
     * Get the value of imageFormat
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Set the value of imageFormat
     */
    public function setImageFormat($imageFormat): self
    {
        $this->imageFormat = $imageFormat;

        return $this;
    }

    /**
     * Get the value of finalImageDirectory
     */
    public function getFinalImageDirectory()
    {
        return $this->finalImageDirectory;
    }

    /**
     * Set the value of finalImageDirectory
     */
    public function setFinalImageDirectory($finalImageDirectory): self
    {
        $this->finalImageDirectory = $finalImageDirectory;

        return $this;
    }

    /**
     * Get the value of finalImageName
     */
    public function getFinalImageName()
    {
        return $this->finalImageName;
    }

    /**
     * Set the value of finalImageName
     */
    public function setFinalImageName($finalImageName): self
    {
        $this->finalImageName = $finalImageName;

        return $this;
    }
}
