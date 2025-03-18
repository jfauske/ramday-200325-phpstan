<?php

namespace Ramday\Phpstan;

class Developer
{
    /**
     * @param $name
     * @param $yearsOfExperience
     * @param $skills
     */
    public function __construct($name, $yearsOfExperience, $skills)
    {
        $this->name = $name;
        $this->yearsOfExperience = $yearsOfExperience;
        $this->skills = $skills;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getExperience()
    {
        return $this->yearsOfExperience;
    }

    /**
     * @param $skill
     */
    public function addSkill($skill)
    {
        $this->skills[] = $skill;
    }

    /**
     * @return array
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param $years
     */
    public function increaseExperience($years)
    {
        $this->yearsOfExperience += $years;
    }
}



