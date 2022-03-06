<?php

enum TaskStatusEnum: string
{
    case LATE_DELIVERY = 'Entrega atrasada';
    case PENDING = 'Pendente';
    case DELIVERED = 'Entregue';
    case NOT_DELIVERED = 'Não entregue';
}