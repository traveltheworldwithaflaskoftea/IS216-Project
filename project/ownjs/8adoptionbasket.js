const pets = {

}

function addPets(){
    let 
}

function adoptionBasket(){

    var display = `
    <table border='1'>
        <tr>
            <th>Description</th>
            <th>Adopt</th>
        </tr>

        <tr>
            <td>
                <ul>
                    <img src="images/golden1.jpg">
                    <li>Name: Paris</li>
                    <li>Age: 12</li>
                    <li>Gender: Female</li>
                    <li>Breed: Golden Retriever</li>
                </ul> 
            </td>
        
            <td>
                <input type="checkbox" id="pet1" name="Pet 1" value="pet1">
                <label for="pet1">😍ADOPT ME!</label><br>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <img src="images/golden2.jpg">
                    <li>Name: London</li>
                    <li>Age: 8</li>
                    <li>Gender: Male</li>
                    <li>Breed: Maltese</li>
                </ul>
            </td>

            <td>
                <input type="checkbox" id="pet2" name="Pet 2" value="pet2">
                <label for="pet2">😍ADOPT ME!</label><br>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <img src="images/golden3.jpg">
                    <li>Name: Sydney</li>
                    <li>Age: 4</li>
                    <li>Gender: Female</li>
                    <li>Breed: Pomeranian</li>
                </ul> 
            </td>

            <td>
                <input type="checkbox" id="pet2" name="Pet 2" value="pet2">
                <label for="pet2">😍ADOPT ME!</label><br>
            </td>
        </tr>
    </table>`;

    document.getElementById("wishlist").innerHTML = display;

    console.log("hi");
}