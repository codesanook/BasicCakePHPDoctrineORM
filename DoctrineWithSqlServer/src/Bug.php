<?php

use Doctrine\Common\Collections\ArrayCollection;

class Bug
{
    protected $id;
    protected $description;
    protected $created;
    protected $status;

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    protected $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    
    protected $engineer;
    protected $reporter;

    public function setEngineer($engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function setReporter($reporter)
    {
        $reporter->addReportedBug($this);//set to child
        $this->reporter = $reporter;//parent where foreint key exist
    }

    public function getEngineer()
    {
        return $this->engineer;
    }

    public function getReporter()
    {
        return $this->reporter;
    }
    
    
    //protected $products = null;

    public function assignToProduct($product)
    {
        $this->products[] = $product;//add many to many
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function close()
    {
        $this->status = "CLOSE";
    } 
    

}

?>
