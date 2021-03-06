<?php

declare(strict_types=1);

namespace Doctrine\Tests\Inflector\Rules\Portuguese;

use Doctrine\Inflector\CachedWordInflector;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\Rules\Portuguese;
use Doctrine\Inflector\RulesetInflector;
use Doctrine\Tests\Inflector\Rules\LanguageFunctionalTest;

class PortugueseFunctionalTest extends LanguageFunctionalTest
{
    /**
     * @return string[][]
     */
    public function dataSampleWords() : array
    {
        return [
            ['livro', 'livros'],
            ['radio', 'radios'],
            ['senhor', 'senhores'],
            ['lei', 'leis'],
            ['rei', 'reis'],
            ['luz', 'luzes'],
            ['juiz', 'juizes'],
            ['avião', 'aviões'],
            ['cão', 'cães'],
            ['interesse', 'interesses'],
            ['ás', 'ases'],
            ['mão', 'mãos'],
            ['peão', 'peões'],
            ['casa', 'casas'],
            ['árvore', 'árvores'],
            ['cor', 'cores'],
            ['álbum', 'álbuns'],
            ['mulher', 'mulheres'],
            ['nação', 'nações'],
            ['país', 'países'],
            ['chão', 'chãos'],
            ['charlatão', 'charlatães'],
            ['cidadão', 'cidadãos'],
            ['consul', 'consules'],
            ['cristão', 'cristãos'],
            ['difícil', 'difíceis'],
            ['email', 'emails'],
        ];
    }

    protected function createInflector() : Inflector
    {
        return new Inflector(
            new CachedWordInflector(new RulesetInflector(
                Portuguese\Rules::getSingularRuleset()
            )),
            new CachedWordInflector(new RulesetInflector(
                Portuguese\Rules::getPluralRuleset()
            ))
        );
    }
}
