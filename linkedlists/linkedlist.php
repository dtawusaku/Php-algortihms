<?php

/*
 * Practical Implemetation of a linked list
 * */

/*
    NOTE: In other programming languages, Arrays have fixed length. 
    That is why lists are preffered.
*/
//Node
class ListNode
{
    public $data = null;
    public $next = null;

    public function __construct($data = null)
    {
        $this->data = $data;
    }
}

//Linked List
class LinkedList
{
    private $firstNode = null; //Head node or FirstNode
    private $totalNodes = 0; //Total number of nodes

    public function insert($data = null)
    {
        $newNode  = new ListNode($data);

        if ($this->firstNode == null) { //Yes list is empty
            $this->firstNode = &$newNode;
        } else { //Yes. List is not empty
            $currentNode = $this->firstNode; //Get first node

            //iterate from the first node until the end of the list
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = $newNode;
        }
        $this->totalNodes++;
        return true;
    }
    public function insertAtFirst($data = null)
    {
        $newNode  = new ListNode($data);

        if ($this->firstNode == null) { //Yes list is empty
            $this->firstNode = &$newNode;
        } else { //Yes. List is not empty
            $currentFirstNode = $this->firstNode; //Hold current first node
            $this->firstNode = &$newNode; ///new node takes previous first node place
            $newNode->next = $currentFirstNode; //Previous first node becomes the next node
        }
        $this->totalNodes++;
        return true;
    }

    public function display()
    {
        echo "Total book titles: " . $this->totalNodes . "\n";
        $currentNode = $this->firstNode;
        while ($currentNode != null) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    public function search($data = null)
    {
        if ($this->totalNodes != 0) {
            $currentNode = $this->firstNode;

            while ($currentNode != null) {
                if ($currentNode->data == $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }

        return false;
    }
}

//Implementation

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();
echo "\n";
$BookTitles->insert("Artificial intelligence");
$BookTitles->display();
echo "\n";
$BookTitles->search("Artificial intelligence");
