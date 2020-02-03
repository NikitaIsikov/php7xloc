<?php

namespace classes;

class Student_8
{
    public string $name;
    public int $course;
    private string $courseAdmin;

    public function transferToNextCourse()
    {
        if ($this->isCourseCorrect($this->course + 1)) {
            $this->course++;
        }
    }
    public function setCourseAdmin(string $admin)
    {
        $this->courseAdmin = $admin;
    }
    public function getCourseAdmin()
    {
        return $this->courseAdmin;
    }
    private function isCourseCorrect(int $course)
    {
        return $res = ($course >= 0 && $course <= 5) ? true : false;
    }


}