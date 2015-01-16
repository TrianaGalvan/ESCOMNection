/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addRow(tableID) 
{
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var cell1 = row.insertCell(0);
    var element1 = document.createElement("input");
    element1.className="form-control"
    element1.size=70;
    element1.onChange="conMayusculas(this)";
    cell1.appendChild(element1);
}

function deleteRow(tableID) 
{
    if(confirm('¿Seguro que desea eliminar un campo?'))
    {
        var table = document.getElementById(tableID);
        var ultimo = table.rows.length;
        table.deleteRow((table.rows.length)-1); 
    }
}

function conMayusculas(field) 
{
    field.value = field.value.toUpperCase()
}

function eliminarTodo(tableID1,tableID2)
{
    var table1 = document.getElementById(tableID1);
     var rowCount = table1.rows.length;
     for(var i=0; i<rowCount; i++) {
                  var row = table1.rows[i];
                  var chkbox = row.cells[0].childNodes[0];
                  if(false == chkbox.checked) {
                           table1.deleteRow(i);
                           rowCount--;
                           i--;
                  }
     }
}

function validarCampos()
{
    var numapoyo = document.getElementById('numapoyo').value;
    if(numapoyo == null || numapoyo=='')
    {
           alert('No se ha ingresado el numero de Apoyo');
           return false;
    }
    var tipoapoyo = document.getElementById('tipoapoyo').value;
    if(puesto == null || puesto=='')
    {
           alert('No se ha ingresado el tipo de Apoyo');
           return false;
    }

    alert('Yes: '+numapoyo+ ' ' +tipoapoyo);
    return true;
}