function movetopage(e){
   if(e.value){
       window.location.href ="./flightConnectionAssign.html"
       
   }
   else{
         window.location.href ="./connection.html"
        
   }
}










function addItem(newItem, inputElement) {
    if (newItem && !items.includes(newItem)) {
        items.push(newItem);  // Add the new item to the items array
        inputElement.value = "";  // Clear the input field
        alert(`"${newItem}" added to the list!`);
    } else if (items.includes(newItem)) {
        alert(`"${newItem}" is already in the list.`);
    } else {
        alert("Please enter a valid item.");
    }
}





function movetopage(e){
   if(e.value){
       window.location.href ="./flightConnectionAssign.html"
       
   }
   else{
         window.location.href ="./connection.html"
        
   }
}
let items = ["Apple", "Banana", "Orange", "Pineapple", "Grapes", "Mango", "Strawberry", "Watermelon", "Peach", "Blueberry"];

document.querySelectorAll('.search').forEach(searchInput => {
    searchInput.addEventListener('keyup', (e) => showSuggestions(e.target));
});

function showSuggestions(inputElement) {
    const inputValue = inputElement.value.toLowerCase();
    const suggestionsBox = inputElement.nextElementSibling; // Get the related dropdown div
    suggestionsBox.innerHTML = "";  // Clear the previous suggestions

    if (inputValue) {
        const filteredItems = items.filter(item => item.toLowerCase().includes(inputValue));

        // Display filtered suggestions
        filteredItems.forEach(item => {
            const suggestion = document.createElement("div");
            // suggestion.dataset.bsToggle = "modal";
            // suggestion.dataset.bsTarget = "#exampleModal1";
          
            suggestion.classList.add("suggestion-item");
            suggestion.textContent = item;
            suggestion.onclick = () => {
                inputElement.value = item;
                suggestionsBox.innerHTML = ""; // Clear suggestions after selecting
            };
            suggestionsBox.appendChild(suggestion);
        });

        // Show "Add" button if the input does not match any item in the list
        if (!filteredItems.length) {
            const addButton = document.createElement("div");
            addButton.classList.add("suggestion-item", "add-item");
            addButton.dataset.bsToggle = "modal";
            addButton.dataset.bsTarget = "#exampleModal1";
            addButton.innerHTML = `Add "<strong >${inputValue}</strong>"`;
          
           
            // addButton.onclick = () => {
            //     addItem(inputValue, inputElement);
            // };
            suggestionsBox.appendChild(addButton);
        }
    }
}