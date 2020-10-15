<?php


class Queue
{
    private $limit;
    private $queue;

    public function __construct($limit)
    {
        $this->queue = array();
        $this->limit = $limit;
    }
    public function enqueue($item){
        if(count($this->queue)<$this->limit){
            return array_unshift($this->queue,$item);
        }
        else{
            throw new RuntimeException("Queue is full");
        }
    }
    public function dequeue(){
        if($this->isEmpty()){
            throw new RuntimeException("Queue is empty");
        }
        else{
            return array_pop($this->queue);
        }
    }
    public function isEmpty(){
        return empty($this->queue);
    }
    public function checkEmpty(){
        if(count($this->queue)==0){
            echo "Empty";
        }
        else{
            echo "Not empty";
        }
    }
}