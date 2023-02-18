<?

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use App\Services\Interfaces\CommunicationInterface;

class HomeController
{
    public function __construct(protected CommunicationInterface $emailService)
    {
    }

    public function index(): View
    {
        $this->emailService->send(array('Jacobs'), 'Hey Jacobs');

        return View::make('index');
    }
}
