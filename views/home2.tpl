<table>
    <a href="?action=admin&cms=insert">new</a>
    {foreach from=$result item=oneItem}
        <tr>
            <td style="display: none" name="id">{$oneItem.id}</td>
            <td name="title">{$oneItem.title}</td>
            <td><a href="?action=admin&cms=delete&id={$oneItem.id}">delete</a></td>
            <td><a href="?action=admin&cms=edit&title={$oneItem.id}">edit</a></td>
        </tr>
    {/foreach}
</table>