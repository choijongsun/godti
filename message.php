# message.php
 
<?php
 
// ��û�� �޾� ����
$data = json_decode(file_get_contents('php://input'), true);
 
// ���� ��û���� content �׸� ����
$content = $data["content"];
 
 
 
// '�����ϱ�' ��ư ó��
if( $content == "�����ϱ�" )
{
echo <<< EOD
    {
        "message": {
            "text": "���� �������̶� ����� �� ���ص� ��������^^;"
        }
    }
EOD;
}
// '����' ��ư ó��
else if( $content == "����")
{
echo <<< EOD
    {
        "message": {
            "text": "���� �� ���� ������ ��õɰž�. ���ݸ� ��ٷ�~~~"
        }
    }    
EOD;
}
// '�ȳ�'�̶� �ܾ ���ԵǾ����� ó��
else if( strpos($content, "�ȳ�") !== false )
{
echo <<< EOD
    {
        "message": {
            "text": "�ȳ�~~ �ݰ��� ����"
        }
    }    
EOD;
}
// �׹��� �����϶� 
else
{
echo <<< EOD
    {
        "message": {
            "text": "���� ���� ������"
        }
    }    
EOD;
}
 
?>
