'use strict'
document.addEventListener('DOMContentLoaded',function(){
    let button = document.querySelector('#button');
    let rowUser = document.querySelector('#showUsers');
    button.addEventListener('click',getUsers);

    function getUsers(){
        fetch('http://localhost/PDO/probar.php')
        .then(function(req){
            if(req.ok){
                return req.json();
            }
        })
        .then(function(res){
            let template = '';
            res.forEach((value)=>{
                template+= `
                <tr>
                    <th scope="row">${value.id}</th>
                    <td>${value.role_id}</td>
                    <td>${value.username}</td>
                    <td>${value.email}</td>
                    <td>${value.password}</td>
                    <td>${value.phone}</td>
                    <td>${value.created_in}</td>
                    <td>${value.modified_at}</td>
              </tr>
                `;

                rowUser.innerHTML = template;
            });
        });
    }
});