function btnDone(){
    let wash_type = document.querySelector('input[name="washtype"]:checked')
    let time = document.getElementById('time')
    let timeValue = time.value
    let name_cust = document.getElementById('name').value
    let rep = document.getElementById('report')
    let phone_cust = document.getElementById('phone').value
    let wax = document.querySelector('input[name="wax"]:checked')
    let waxRadio = document.querySelector('input[name="wax"]')
    
    if(!wash_type || !name_cust || !phone_cust || !wax){
        alert('ERRO!');
        return;
    }

    if(wash_type.value == 'Detailed'){
        let force = document.querySelector('input[name="wax"][value="yes"]');
        force.checked = true;

    }

    

    rep.innerHTML = `<br>
                    Reserva: <br>
                    Nome Cliente: ${name_cust}<br>
                    Telefone Cliente: ${phone_cust}<br>
                    Tipo de lavagem: ${wash_type.value}<br>
                    Cera: ${force.value}<br>
                    Horário:
                    `
    
                 
      
    
}