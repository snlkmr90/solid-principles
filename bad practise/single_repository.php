<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
class order
{
    private $author;
    private $title;
    private $content;
    
    public function __construct(array $data)
    {
        $this->author =$data['author'];
        $this->title =$data['title'];
        $this->content =$data['content'];
    }
    
    public function getOrder()
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content

        ];
    }
    public function print_json()
    {
        return json_encode($this->getOrder());
    }
    public function print_html()
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
                            <td>".$this->author."</td>
                            <td>".$this->title."</td>
                            <td>".$this->content."</td>
                        </tr>
                    </tbody>
                </table>";
                return $html; 
    }
}
$order = new order(['title'=>'this is title',
                    'content'=>'page content is here',
                    'author'=>'sunil']); 
print_r($order->print_html());