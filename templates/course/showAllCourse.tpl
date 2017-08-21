<table>
{foreach from =$user item =p }

 <tr style="background: {cycle values='silver ,gray,green'} " >
    <td> {$p->id}</td>
    <td> {$p->c_name}</td>
    <td> {$p->c_dept}</td>
 </tr>

{/foreach}

</table>
