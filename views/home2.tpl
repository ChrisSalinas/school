<table>
    <a href="?action=admin&cms=insert">new</a>

    {foreach from=$result item=oneItem}
        <tr>
            <td name="id">{$oneItem.ID}</td>
            <td name="schoolName">{$oneItem.schoolName}</td>
            <td name="streetname">{$oneItem.streetname}</td>
            <td name="number">{$oneItem.number}</td>
            <td name="zip-code">{$oneItem.number}</td>
            <td name="region">{$oneItem.Naam}</td>
            <td><a href="?action=admin&cms=delete&id={$oneItem.ID}">delete</a></td>
            <td><a href="?action=admin&cms=edit&title={$oneItem.ID}">edit</a></td>
        </tr>
    {/foreach}
</table>