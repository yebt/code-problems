#!/bin/bash

COMMAND=${@:-"echo 'Hello, World!'"}

# Nombre de la sesión de tmux
# SESSION_NAME="my_session"
# ACTUAL SESSION NAME
SESSION_NAME=$(tmux display-message -p '#S')

# Comando que deseas ejecutar
# COMMAND="echo 'Hello, Panel 2!'"

# Inicia una sesión de tmux si no existe
if ! tmux has-session -t "$SESSION_NAME" 2>/dev/null; then
  tmux new-session -d -s "$SESSION_NAME"
fi

# Verifica si el panel 2 existe
PANE_COUNT=$(tmux list-panes -t "$SESSION_NAME" | wc -l)
if [ "$PANE_COUNT" -lt 2 ]; then
  tmux split-window -h -t "$SESSION_NAME"
fi

# Enviar el comando al panel 2
tmux send-keys -t "$SESSION_NAME:.2" "$COMMAND" C-m

