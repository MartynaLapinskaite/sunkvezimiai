<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class NaujasSunkvezimisForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('marke', 'select', [
                'choices' => ['1' => 'Volvo', '2' => 'VAZ', '3' => 'Mercedes', '4' => 'GAZ'],
                'empty_value' => 'Nepasirinkta markė',
                'rules' => 'required',
                'label' => 'Markė'
            ])
            ->add('gamybos_metai', 'number', [
                'rules' => 'required|numeric|min:1900|max:' . now()->year
            ])
            ->add('savininko_vardas_pavarde', 'text', [
                'rules' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
                'label' => 'Savininko vardas pavardė'
            ])
            ->add('savininku_skaicius', 'number', [
                'label' => 'Savininkų skaičius'
            ])
            ->add('komentarai', 'text')
            ->add('submit', 'submit', [
                'label' => 'Pridėti sunkvežimį'
            ]);
    }
}
