<?php
namespace Human;

class Programmer extends Human
{
    protected $programmingLanguages;
    protected $experience;

    public function getProgrammingLanguages()
    {
        return $this->programmingLanguages;
    }
    public function birthMessage()
    {
        echo "Програміст народив дитину!\n";
    }
    public function setProgrammingLanguages($programmingLanguages)
    {
        $this->programmingLanguages = $programmingLanguages;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }
}
