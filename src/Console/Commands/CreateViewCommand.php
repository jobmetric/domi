<?php

namespace JobMetric\Domi\Console\Commands;

use Illuminate\Console\Command;
use JobMetric\PackageCore\Commands\ConsoleTools;

class CreateViewCommand extends Command
{
    use ConsoleTools;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'domi:view
                {view : The name of the view to create (dot notation) -> For example: admin.users.index}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view extend by base layout Domi';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $view = $this->argument('view');

        $parts = explode('.', $view);
        $file = array_pop($parts);
        $path = implode('/', $parts);

        $file_path = 'views/' . str_replace('.', '/', $view) . '.blade.php';

        if ($this->isFile(resource_path($file_path))) {
            $this->message("View <options=bold>$file_path</> already exists.", 'error');

            return 1;
        }

        $content = $this->getStub(__DIR__ . "/stub/blank.blade");

        if (!$this->isDir(resource_path("views/$path"))) {
            $this->makeDir(resource_path("views/$path"));
        }

        $this->putFile(resource_path("views/$path/$file.blade.php"), $content);

        $this->message("View <options=bold>[$path/$file.blade.php]</> created successfully.", "success");

        return 0;
    }
}
