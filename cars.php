<?php
class Cars implements JsonSerializable {
    var $category;
    var $availability;
    var $brand;
    var $model;
    var $model_year;
    var $mileage;
    var $fuel_type;
    var $seats;
    var $price_per_day;
    var $description;
    
    function __construct($cat, $avai, $bra, $mdl, $mdl_year, $mil, $fuel, $seat, $price, $desc) {
        $this->category = $cat;
        $this->availability = $avai;
        $this->brand = $bra;
        $this->model = $mdl;
        $this->model_year = $mdl_year;
        $this->mileage = $mil;
        $this->fuel_type = $fuel;
        $this->seats = $seat;
        $this->price_per_day = $price;
        $this->description = $desc;
    }
    
    function jsonSerialize() {
        if($this->availability == 1)
            $avai = "Y";
        else
            $avai = "N";
        $json = array(
            "category"=>$this->category,
            "availability"=>$avai,
            "brand"=>$this->brand,
            "model"=>$this->model,
            "model_year"=>$this->model_year,
            "mileage"=>$this->mileage,
            "fuel_type"=>$this->fuel_type,
            "seats"=>$this->seats,
            "price_per_day"=>$this->price_per_day,
            "description"=>$this->description
        );
        return $json;
    }
}

$carmy = new Cars("Sedan", 1, "Toyota", "Camry", 2013, 15000, "Petrol", 5, 120, "The Toyota Camry is an automobile sold internationally by the Japanese auto manufacturer Toyota since 1982, spanning multiple generations.");
$x_trail = new Cars("SUV", 1, "Nissan", "X-trail", 2015, 25000, "Petrol", 7, 150, "The Nissan X-Trail is a compact crossover SUV (C-segment) produced by the Japanese automaker Nissan since 2000.");
$_320i = new Cars("Sedan", 1, "BMW", "320i", 2016, 17000, "Petrol", 5, 220, "The BMW E21 is the first generation of the BMW 3 Series compact executive cars, which were produced from June 1975 to 1983 and replaced the BMW 02 Series.");
$captiva = new Cars("SUV", 0, "Holden", "Captiva", 2017, 14000, "Petrol", 5, 165, "The Holden Captiva is a crossover SUV that was produced from 2006 to 2018 by GM Korea (previously known as Daewoo).");
$cherokee = new Cars("SUV", 0, "Jeep", "Cherokee", 2016, 13500, "Petrol", 5, 200, "The Jeep Cherokee is a line of SUVs manufactured and marketed by Jeep over five generations.");
$civic = new Cars("Sedan", 1, "Honda", "Civic", 2018, 19900, "Petrol", 5, 140, "The Honda Civic is a series of automobiles manufactured by Honda since 1972.");
$glc = new Cars("SUV", 1, "Mercedes-Benz", "GLC", 2018, 23000, "Petrol", 5, 180, "The Mercedes-Benz GLC-Class (X253/C253) is a compact luxury crossover SUV introduced in 2015 for the 2016 model year that replaces the GLK-Class.");
$golf = new Cars("Wagon", 0, "Volkswagen", "Golf", 2017, 20000, "CNG", 5, 150, "The Volkswagen Golf is a compact car/small family car (C-segment) produced by the German automotive manufacturer Volkswagen since 1974.");
$jimny = new Cars("SUV", 1, "Suzuki", "Jimny", 2018, 9800, "Petrol", 5, 100, "The Suzuki Jimny is a series of four-wheel drive off-road mini SUVs, manufactured and marketed by Japanese automaker Suzuki since 1970.");
$sonata = new Cars("Sedan", 1, "Hyundai", "Sonata", 2019, 10500, "Petrol", 5, 115, "The Hyundai Sonata is a mid-size car that has been manufactured by Hyundai since 1985.");

$array = array($carmy, $x_trail, $_320i, $captiva, $cherokee, $civic, $glc, $golf, $jimny, $sonata);

header('Content-Type: application/json');
file_put_contents('cars.json', json_encode($array, JSON_PRETTY_PRINT));
?>