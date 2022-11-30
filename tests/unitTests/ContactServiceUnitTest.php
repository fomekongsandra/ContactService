<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../../src/ContactService.php';

/**
 * * @covers invalidInputException
 * @covers \ContactService
 *
 * @internal
 */
final class ContactServiceUnitTest extends TestCase {
    private $contactService;

    public function __construct(string $name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
        $this->contactService = new ContactService();
    }

    public function testCreationContactWithoutAnyText() {
        $ContactService= new ContactService();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("dois pas etre null!!");
        $ContactService->createContact("");

    }

    public function testCreationContactWithoutPrenom() {
        
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('le prenom doit être renseigné');
        $contactService = new ContactService();
        $contactService->createContact("fomekong",null);
    }

    public function testCreationContactWithoutNom() {
        $ContactService= new ContactService();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("le nom ne doit être renseigné");
        $ContactService->createContact(null,"sandra");
    }

    public function testSearchContactWithNumber() {
        $ContactService = new ContactService();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("search doit être une chaine de caractères");
        $ContactService->SearchContact(15);
    }

    public function testModifyContactWithInvalidId() {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("le nom ne doit être renseigné");
        $contactService = new ContactService();
        $contactService->UpdateContact(1,"","sandra");
    }

    public function testDeleteContactWithTextAsId() {
        $calc = new calcul();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("l'id doit être un entier non nul");
        $calc->testDeleteContact(0);
    }

   
}
