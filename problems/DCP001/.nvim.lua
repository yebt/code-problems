vim.keymap.set(
	"n",
	"<F2>",
	-- ':silent !tmux send-keys -t 2 "clear" Enter " composer test -- $(realpath  %)" Enter <CR>',
	':silent !sh ./../../scripts/tmux-runner.sh "clear && composer test -- $(realpath  %)" <CR>',
	{ noremap = true, silent = true , desc = "Run test" }
)
