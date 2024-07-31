<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
class order
{
    public $author;
    public $title;
    public $content;

    public function __construct(array $data)
    {
        $this->author = $data['author'];
        $this->title = $data['title'];
        $this->content = $data['content'];
    }

    public function getOrder()
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content

        ];
    }
}
interface orderInterface
{
    public function print(Order $order);
}
class printJson implements orderInterface
{
    public function print(Order $order)
    {
        return json_encode($order);
    }
}
class printHtml implements orderInterface
{
    public function print(Order $order)
    {
        $html = "<table>
                    <thead>
                        <th>
                            <tr>Author</tr>
                            <tr>Title</tr>
                            <tr>Content</tr>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>" . $order->author . "</td>
                            <td>" . $order->title . "</td>
                            <td>" . $order->content . "</td>
                        </tr>
                    </tbody>
                </table>";
        return $html;
    }
}
$order = new order([
    'author' => 'this is author ',
    'title' => 'this is title',
    'content' => 'this is content'
]);
$printHtml = new printHtml();  
echo $printHtml->print($order);

$printJson = new printJson();  
echo $printJson->print($order);
