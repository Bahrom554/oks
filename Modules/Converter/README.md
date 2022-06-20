```
$textInterpreter = new TextInterpreter();
$textInterpreter->setTokenizer(new LatinTokenizer());
$textInterpreter->addBehavior(new LatinBehaviour([]));

$string = $textInterpreter->process($string)->getText();
```