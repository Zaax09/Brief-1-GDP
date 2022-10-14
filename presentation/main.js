var search = document.querySelector("#search");
let table = document.querySelector("#myTable");

search.addEventListener("keyup", function(){


    let form = new FormData();
    form.append("search", "POST");
    form.append("names", search.value);

    fetch("search.php",{
        method: "POST",
        body: form
    }).then((res=>{
        return res.json();
    })).then((data)=>{
        console.log(data)
        table.innerHTML = "";
        for(var i = 0; i < data.length; i++){
            table.innerHTML += `
            <tr>
                <td>${data[i]["names"]}</td>
                <td>
                <a style="      background: green;
                                color: #ffffff;
                                border-radius: 5px;
                                padding: 2px 10px; 
                " href='modifier.php?editid=${data[i]["id"]}'>Edit</a>


                <a style="  background: #e60000;
                            color: #ffffff;
                            border-radius: 5px;
                            padding: 2px 10px; " 
                 href='delete.php?deleteid=${data[i]["id"]}'>Delete</a>
                </td>
            </tr>
            
            `;
        }
    })
})
