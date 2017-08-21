
<table>
{foreach from =$user item =p }

 <tr style="background: {cycle values='silver ,gray,green'} " >
    <td> {$p->id}</td>
    <td> {$p->name}</td>
    <td> {$p->degree}</td>
 </tr>

{/foreach}

</table>
