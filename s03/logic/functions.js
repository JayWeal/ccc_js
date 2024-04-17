export function threeHealthiestFoods(foods, indicator) {
    return foods.filter(food => food.healthindicator >= 2)
        .map(foods => food)
        .toSorted(indicator);        
}