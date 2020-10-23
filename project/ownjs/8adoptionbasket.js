const pets = {

}

function addPets(){
    let 
}

function adoptionBasket(){

    var display = `
    <p>
        <ul>`;

        
        display += `<li>
                        <ul>
                            <img src="images/golden1.jpg">
                            <li>Name: Paris</li>
                            <li>Age: 12</li>
                            <li>Gender: Female</li>
                            <li>Breed: Golden Retriever</li>
                        </ul> 
                        <button onclick="location.href='#adoptionpage'">😍 ADOPT ME!</button>
                    </li>`;



            <li>
                <ul>
                    <img src="images/golden2.jpg">
                    <li>Name: London</li>
                    <li>Age: 8</li>
                    <li>Gender: Male</li>
                    <li>Breed: Maltese</li>
                </ul> 
                <button onclick="location.href='#adoptionpage'">😍 ADOPT ME!</button>
            </li>
            <li>
                <ul>
                    <img src="images/golden3.jpg">
                    <li>Name: Sydney</li>
                    <li>Age: 4</li>
                    <li>Gender: Female</li>
                    <li>Breed: Pomeranian</li>
                </ul> 
                <button onclick="location.href='#adoptionpage'">😍 ADOPT ME!</button>
            </li>
        </ul>
    </p>`;

    document.getElementById("wishlist").innerHTML = display;

    console.log("hi");
}