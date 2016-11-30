<table>
{foreach from=$result item=oneItem}
    <tr>
        <td>{$oneItem.title}</td>
        <td>{$oneItem.content}</td>
    </tr>
{/foreach}
</table>