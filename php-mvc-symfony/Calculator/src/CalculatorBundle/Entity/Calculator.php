<?php

namespace CalculatorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calculator
 *
 * @ORM\Table(name="calculator")
 * @ORM\Entity(repositoryClass="CalculatorBundle\Repository\CalculatorRepository")
 */
class Calculator
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="leftOperand", type="float")
     */
    private $leftOperand;

    /**
     * @var float
     *
     * @ORM\Column(name="rightOperand", type="float")
     */
    private $rightOperand;

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=255)
     */
    private $operator;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set leftOperand
     *
     * @param float $leftOperand
     *
     * @return Calculator
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;

        return $this;
    }

    /**
     * Get leftOperand
     *
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * Set rightOperand
     *
     * @param float $rightOperand
     *
     * @return Calculator
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;

        return $this;
    }

    /**
     * Get rightOperand
     *
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * Set operator
     *
     * @param string $operator
     *
     * @return Calculator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }
}

