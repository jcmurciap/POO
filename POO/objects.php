<!-- INTERACCIÓN ENTRE OBJETOS -->

<?php
    
    class Board{
        
        // Codigo convencional
        // public function closeTask($task){
        //     if($task->isDone()){
        //         $task->setStatus('ready');
        //     }
        // }

        // PRINCIPIO "TELL, DONT ASK"
        // Lo mejor es decirle al objeto lo que quieres
        // que haga, y dejar que sea responsabilidad del 
        //propio objeto cambiar su estado


        public function closeTask(Task $task){
            // mandamos a cerrar la tarea, no nos importa cual es el estado
            $task->close();
        }
    }

    class Task{
        public function close(){
            if($this->isDone()) {
                $this->setStatus('ready');

            } else {
                $this->setStatus('Pending');
            }
        }

        public function isDone(){
            // do stuff
        }

        public function setStatus($status){
            // do stuff
        }
    }
?>


