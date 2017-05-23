

/*toggle sidebar*/
function toggleSidebar(event){
	event.preventDefault(event);
	var getID = document.getElementById("wrapper");
	getID.classList.toggle("active");
	console.log("clicked");
}


/*add LMO for notification*/
function deleteRow(el) {
	var table = document.getElementById('addLMOtable');
    var i = el.parentNode.parentNode.rowIndex;
    console.log(i);
       table.deleteRow(i);
        while (table.rows[i]) {
        updateRow(table.rows[i], i, false);
        i++;
    }
    
}

function insRow(event)
{
	var table = document.getElementById('addLMOtable'),
    	tbody = table.getElementsByTagName('tbody')[0],
    	clone = tbody.rows[0].cloneNode(true);
	var new_row = updateRow(clone, ++tbody.rows.length, true);
    tbody.appendChild(new_row);
}

function updateRow(row, i, reset) {
    row.cells[0].innerHTML = i;

    var inp1 = row.cells[1].getElementsByTagName('input')[0];
    var inp2 = row.cells[2].getElementsByTagName('input')[0];
    var inp3 = row.cells[3].getElementsByTagName('input')[0];
    var inp4 = row.cells[4].getElementsByTagName('input')[0];
    var inp5 = row.cells[5].getElementsByTagName('input')[0];
    var inp6 = row.cells[6].getElementsByTagName('input')[0];
    
    
    inp1.id = 'notification_id' + i;
    inp2.id = 'material_type' + i;
    inp3.id = 'name' + i;
    inp4.id = 'risk_level' + i;
    inp5.id = 'quantity' + i;
    inp6.id = 'volume' + i;

    if (reset) {
        inp2.value = inp3.value = inp4.value = inp5.value = inp6.value = '';
    }
    
    return row;
}

