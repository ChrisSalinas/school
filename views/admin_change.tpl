

        {foreach from=$result item=oneItem}
            <form method="post">
                <table >
                <tr>
                    <input  style="display: none" name="id2" value="{$oneItem.id}" >
                    <td><textarea name="schoolName" id="title" cols="30" rows="3">{$oneItem.schoolName}</textarea></td>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
                </table>
            </form>
        {/foreach}




