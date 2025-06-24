const favForm = document.querySelector("#favForm");

if (favForm) {
    favForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        const userId = favForm.querySelector("input[name='id_user']").value;
        const recetteId = favForm.querySelector("input[name='id_recette']").value;

        try {
            const response = await fetch("http://127.0.0.1:8000/api/addFavorite", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json"
                },
                body: JSON.stringify({
                    id_user: userId,
                    id_recette: recetteId
                })
            });

            const result = await response.json();

            if (response.ok && result.ResultCode === 200) {
                console.log("Favori ajouté !");
            } 
            
            else {
                console.error("Erreur lors de l'ajout du favori :", result);
            }
        } 
        
        catch (err) {
            console.error("Erreur réseau :", err.message);
        }
    });
}
