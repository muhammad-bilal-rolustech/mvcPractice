<table>
{foreach from =$user item =p }

 <tr style="background: {cycle values='silver ,gray,green'} " >
    <td> {$p->id}</td>
    <td> {$p->t_name}</td>
    <td> {$p->t_dept}</td>
 </tr>

{/foreach}

</table>
