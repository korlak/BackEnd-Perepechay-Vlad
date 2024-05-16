<?php
namespace Human;

class Student extends Human
{
    protected $university;
    protected $course;
    public function birthMessage()
    {
        echo "Студент народив дитину!\n";
    }
    public function getUniversity()
    {
        return $this->university;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function moveToNextCourse()
    {
        $this->course++;
    }
}