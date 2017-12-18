# FromBuilder

$form = new Form('post', '/form/save');
$form->createElement('text', 'nazwa', 'wartosc', ['class' => 'klasa', 'data-attr' => 'atr2'])
    ->createElement('text', 'nazwa2', 'wartosc2', ['class' => 'klasa2', 'data-attr' => 'atr2']);

echo $form;
