

<table>
    {foreach from=$result item=oneItem}
        <tr>
            <td  style="display: none" name="id">{$oneItem.id}</td>
            <td name="title">{$oneItem.title}</td>
            <td><input type="submit" value="remove" name="delete"></td>
        </tr>
    {/foreach}
</table>
