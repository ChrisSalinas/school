<fieldset>
    <legend>change about</legend>
    <table >
        {foreach from=$result item=oneItem}
                <tr>
                    <td  style="display: none" name="id">{$oneItem.id}</td>
                    <td><textarea name="title" cols="30" rows="10">{$oneItem.title}</textarea></td>
                </tr>
        {/foreach}

    </table>
</fieldset>
