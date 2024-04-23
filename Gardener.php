<?php


class Gardener
{
    public string $name;
    private TomatoBuch $plant;

    public function __construct(string $name, TomatoBuch $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }

    public function  work(): void
    {
        if (!$this->plant->allAreRipe()) {
            $this->plant->growAll();
        }
    }

    public function harvest(): void
    {
        if ($this->plant->allAreRipe()) {
            $this->plant->giveAwayAll();
            print "{$this->name} cобирает урожай " . PHP_EOL;
        } else {
            print "Садовник {$this->name} предупреждает: не все плоды созрели!" . PHP_EOL;
        }
    }

    public function KnowledgeBase(): void
    {
        print "Справка по садоводству:\n";
        print "1. Регулярный полив растений.\n";
        print "2. Удаление сорняков и больных листьев.\n";
        print "3. Проверка на вредителей и болезни.\n";
        print "4. Подкормка растений нужными минералами.\n";
    }
}
