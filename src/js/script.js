const ingredients = document.getElementById('ingredients');
const form = document.getElementById('form')
const generate = document.getElementById('generate')

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    try{
        let result = await fetchRecipe(ingredients.value)
        console.log(result)
    }catch (error){
        console.log(error)
    }
});

const fetchRecipe = async (ingredients) => {
    let response = await fetch(`requests/api/generate_recipe.php?ingredients=${encodeURIComponent(ingredients)}`);
    let formatedData = data.recipe;

    return formatedData;
}