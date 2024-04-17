class Person 
{
    public $name;
    public $lastName;
    public $age;

    function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

}